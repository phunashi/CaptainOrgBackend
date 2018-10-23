import { List, Avatar, Row, Col, Card, Icon, Layout, Menu } from "antd";
import React, { Component } from "react";

const { Meta } = Card;
const { Content, Header } = Layout;
const fontStyle = {
    fontSize: "20px"
};
const SubMenu = Menu.SubMenu;
const MenuItemGroup = Menu.ItemGroup;

const data = [
    {
        title: "Title 1",
        cover: (
            <img
                alt="example"
                src="https://gw.alipayobjects.com/zos/rmsportal/JiqGstEfoWAOHiTxclqi.png"
            />
        ),
        actions: [
            <Icon type="setting" />,
            <Icon type="edit" />,
            <Icon type="ellipsis" />
        ]
    },
    {
        title: "Title 2",
        cover: (
            <img
                alt="example"
                src="https://gw.alipayobjects.com/zos/rmsportal/JiqGstEfoWAOHiTxclqi.png"
            />
        )
    },
    {
        title: "Title 3",
        cover: (
            <img
                alt="example"
                src="https://gw.alipayobjects.com/zos/rmsportal/JiqGstEfoWAOHiTxclqi.png"
            />
        )
    },
    {
        title: "Title 4",
        cover: (
            <img
                alt="example"
                src="https://gw.alipayobjects.com/zos/rmsportal/JiqGstEfoWAOHiTxclqi.png"
            />
        )
    }
];

class Veg extends Component {
    handleClick(e) {
        console.log("click ", e);
    }
    render() {
        return (
            <Layout>
                <Content style={{ padding: "10px 50px" }}>
                    <Row>
                        <Col>
                            <List
                                grid={{
                                    gutter: 16,
                                    xs: 1,
                                    sm: 2,
                                    md: 3,
                                    lg: 4,
                                    xl: 4,
                                    xxl: 6
                                }}
                                header="Organic Vegetables"
                                style={fontStyle}
                                dataSource={data}
                                renderItem={item => (
                                    <List.Item>
                                        <Card
                                            cover={item.cover}
                                            actions={item.actions}
                                        />
                                    </List.Item>
                                )}
                            />

                            {/* <List.Item>
                  <Card
                    cover={
                      <img
                        alt="example"
                        src="https://gw.alipayobjects.com/zos/rmsportal/JiqGstEfoWAOHiTxclqi.png"
                      />
                    }
                    actions={[
                      <Icon type="setting" />,
                      <Icon type="edit" />,
                      <Icon type="ellipsis" />
                    ]}
                  >
                    <Meta
                      avatar={
                        <Avatar src="https://zos.alipayobjects.com/rmsportal/ODTLcjxAfvqbxHnVXCYX.png" />
                      }
                      title="Card title"
                      description="This is the description"
                    />
                  </Card>
                </List.Item>
                <List.Item>
                  <Card
                    cover={
                      <img
                        alt="example"
                        src="https://gw.alipayobjects.com/zos/rmsportal/JiqGstEfoWAOHiTxclqi.png"
                      />
                    }
                    actions={[
                      <Icon type="setting" />,
                      <Icon type="edit" />,
                      <Icon type="ellipsis" />
                    ]}
                  >
                    <Meta
                      avatar={
                        <Avatar src="https://zos.alipayobjects.com/rmsportal/ODTLcjxAfvqbxHnVXCYX.png" />
                      }
                      title="Card title"
                      description="This is the description"
                    />
                  </Card>
                </List.Item>
                <List.Item>
                  <Card
                    cover={
                      <img
                        alt="example"
                        src="https://gw.alipayobjects.com/zos/rmsportal/JiqGstEfoWAOHiTxclqi.png"
                      />
                    }
                    actions={[
                      <Icon type="setting" />,
                      <Icon type="edit" />,
                      <Icon type="ellipsis" />
                    ]}
                  >
                    <Meta
                      avatar={
                        <Avatar src="https://zos.alipayobjects.com/rmsportal/ODTLcjxAfvqbxHnVXCYX.png" />
                      }
                      title="Card title"
                      description="This is the description"
                    />
                  </Card>
                </List.Item>
                <List.Item>
                  <Card
                    cover={
                      <img
                        alt="example"
                        src="https://gw.alipayobjects.com/zos/rmsportal/JiqGstEfoWAOHiTxclqi.png"
                      />
                    }
                    actions={[
                      <Icon type="plus" theme="outlined" />,
                      <Icon type="heart" />
                    ]}
                  >
                    <Meta
                      avatar={
                        <Avatar src="https://zos.alipayobjects.com/rmsportal/ODTLcjxAfvqbxHnVXCYX.png" />
                      }
                      title="Card title"
                      description="This is the description"
                    />
                  </Card>
                </List.Item>
              </List> */}
                        </Col>
                        {/* <Col span={6} pull={18}>
              <List header="Filter" style={fontStyle}>
                <List.Item>
                  <Menu
                    onClick={this.handleClick}
                    style={{ width: 256 }}
                    defaultSelectedKeys={["1"]}
                    defaultOpenKeys={["sub1"]}
                    mode="inline"
                  >
                    <SubMenu
                      key="sub1"
                      title={
                        <span>
                          <Icon type="mail" />
                          <span>Navigation One</span>
                        </span>
                      }
                    >
                      <MenuItemGroup key="g1" title="Item 1">
                        <Menu.Item key="1">Option 1</Menu.Item>
                        <Menu.Item key="2">Option 2</Menu.Item>
                      </MenuItemGroup>
                      <MenuItemGroup key="g2" title="Item 2">
                        <Menu.Item key="3">Option 3</Menu.Item>
                        <Menu.Item key="4">Option 4</Menu.Item>
                      </MenuItemGroup>
                    </SubMenu>
                    <SubMenu
                      key="sub2"
                      title={
                        <span>
                          <Icon type="appstore" />
                          <span>Navigation Two</span>
                        </span>
                      }
                    >
                      <Menu.Item key="5">Option 5</Menu.Item>
                      <Menu.Item key="6">Option 6</Menu.Item>
                      <SubMenu key="sub3" title="Submenu">
                        <Menu.Item key="7">Option 7</Menu.Item>
                        <Menu.Item key="8">Option 8</Menu.Item>
                      </SubMenu>
                    </SubMenu>
                    <SubMenu
                      key="sub4"
                      title={
                        <span>
                          <Icon type="setting" />
                          <span>Navigation Three</span>
                        </span>
                      }
                    >
                      <Menu.Item key="9">Option 9</Menu.Item>
                      <Menu.Item key="10">Option 10</Menu.Item>
                      <Menu.Item key="11">Option 11</Menu.Item>
                      <Menu.Item key="12">Option 12</Menu.Item>
                    </SubMenu>
                  </Menu>
                </List.Item>
              </List>
            </Col> */}
                    </Row>
                </Content>
            </Layout>
        );
    }
}

export default Veg;
