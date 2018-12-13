import React, { Component } from "react";
import {
    Card,
    Layout,
    List,
    Menu,
    Icon,
    Carousel,
    Row,
    Col,
    BackTop
} from "antd";
import { Link } from "react-router-dom";

const { Content, Header } = Layout;
const gridStyle = {
    width: "25%",
    textAlign: "center"
};
const fontStyle = {
    fontSize: "20px"
};
const cardBody = {
    padding: "0px"
};

const SubMenu = Menu.SubMenu;
const MenuItemGroup = Menu.ItemGroup;
const { Meta } = Card;

function handleClick(e) {
    console.log("click", e);
}
class HomePage extends Component {
    render() {
        return (
            <Layout>
                <Row>
                    {/* <Col span={4}>
                        <p>{window.token}</p>
                    </Col> */}

                    <Col span={24}>
                        <Carousel
                            effect="fade"
                            adaptiveHeight
                            pauseOnHover
                            autoplay
                        >
                            <div>
                                <Card
                                    hoverable
                                    bodyStyle={{ padding: "0px" }}
                                    cover={
                                        <img
                                            alt="example"
                                            src="/images/home2-slider1.jpg"
                                        />
                                    }
                                />
                            </div>

                            <div>
                                <Card
                                    hoverable
                                    bodyStyle={{ padding: "0px" }}
                                    cover={
                                        <img
                                            alt="example"
                                            src="/images/home2-slider2.jpg"
                                        />
                                    }
                                />
                            </div>
                        </Carousel>
                    </Col>
                </Row>
                <Content style={{ padding: "10px 50px" }}>
                    <Row gutter={16}>
                        <List
                            grid={{
                                gutter: 16,
                                xs: 1,
                                sm: 2,
                                md: 3,
                                lg: 3,
                                xl: 3,
                                xxl: 6
                            }}
                        >
                            <List.Item>
                                <Card
                                    hoverable
                                    bodyStyle={{ padding: "0px" }}
                                    bordered={false}
                                    cover={
                                        <img
                                            alt="example"
                                            src="/images/home2-banner1-1.jpg"
                                        />
                                    }
                                />
                            </List.Item>
                            <List.Item>
                                <Card
                                    hoverable
                                    bodyStyle={{ padding: "0px" }}
                                    bordered={false}
                                    cover={
                                        <img
                                            alt="example"
                                            src="/images/home2-banner1-2.jpg"
                                        />
                                    }
                                />
                            </List.Item>
                            <List.Item>
                                <Card
                                    hoverable
                                    bodyStyle={{ padding: "0px" }}
                                    bordered={false}
                                    cover={
                                        <img
                                            alt="example"
                                            src="/images/home2-banner1-1.jpg"
                                        />
                                    }
                                />
                            </List.Item>
                        </List>
                    </Row>
                    {/* <Card
                hoverable
                bodyStyle={{ padding: "0px" }}
                bordered={false}
                cover={<img alt="example" src="/images/home2-banner1-1.jpg" />}
              />
    
              <Card
                hoverable
                bodyStyle={{ padding: "0px" }}
                bordered={false}
                cover={<img alt="example" src="/images/home2-banner1-2.jpg" />}
              />
         */}
                </Content>
                {/* <Divider style={{ background: "lightblue" }} /> */}
                <div style={{ background: "#fff", padding: "30px" }}>
                    <Row gutter={16}>
                        <List
                            grid={{
                                xs: 1,
                                sm: 2,
                                md: 3,
                                lg: 3,
                                xl: 3,
                                xxl: 6
                            }}
                            header="Favourite Categories"
                            style={fontStyle}
                        >
                            <List.Item>
                                <Card
                                    hoverable
                                    cover={
                                        <img
                                            alt="example"
                                            src="/images/bread.jpg"
                                        />
                                    }
                                >
                                    <Meta
                                        style={{ textAlign: "center" }}
                                        title="Homemade Breads"
                                        description="Hamro Sikkim Ko"
                                    />
                                </Card>
                            </List.Item>
                            <List.Item>
                                <Card
                                    hoverable
                                    cover={
                                        <img
                                            alt="example"
                                            src="/images/egg.jpg"
                                        />
                                    }
                                >
                                    <Meta
                                        style={{ textAlign: "center" }}
                                        title="Homemade Breads"
                                        description="Hamro Sikkim Ko"
                                    />
                                </Card>
                            </List.Item>
                            <List.Item>
                                <Card
                                    hoverable
                                    cover={
                                        <img
                                            alt="example"
                                            src="/images/fruits.jpg"
                                        />
                                    }
                                >
                                    <Meta
                                        style={{ textAlign: "center" }}
                                        title="Homemade Breads"
                                        description="Hamro Sikkim Ko"
                                    />
                                </Card>
                            </List.Item>
                            <List.Item>
                                <Card
                                    hoverable
                                    cover={
                                        <img
                                            alt="example"
                                            src="/images/veg.jpg"
                                        />
                                    }
                                >
                                    <Meta
                                        style={{ textAlign: "center" }}
                                        title="Homemade Breads"
                                        description="Hamro Sikkim Ko"
                                    />
                                </Card>
                            </List.Item>
                            <List.Item>
                                <Card
                                    hoverable
                                    cover={
                                        <img
                                            alt="example"
                                            src="/images/dairy.jpg"
                                        />
                                    }
                                >
                                    <Meta
                                        style={{ textAlign: "center" }}
                                        title="Homemade Breads"
                                        description="Hamro Sikkim Ko"
                                    />
                                </Card>
                            </List.Item>
                            <List.Item>
                                <Card
                                    hoverable
                                    cover={
                                        <img
                                            alt="example"
                                            src="/images/bread.jpg"
                                        />
                                    }
                                >
                                    <Meta
                                        style={{ textAlign: "center" }}
                                        title="Homemade Breads"
                                        description="#hamroSikkim"
                                    />
                                </Card>
                            </List.Item>
                        </List>
                    </Row>
                </div>
                <div>
                    <BackTop />
                    Scroll down to see the bottom-right
                    <strong style={{ color: "rgba(64, 64, 64, 0.6)" }}>
                        {" "}
                        gray{" "}
                    </strong>
                    button.
                </div>
            </Layout>
        );
    }
}

export default HomePage;
